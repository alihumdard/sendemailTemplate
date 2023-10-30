<script>
    $(document).ready(function() {
        var api_url = "{{url('/')}}";
        $(document).on('click', '.edit-user', function() {
            var id = $(this).attr('data-id');
            get_tuser(id);
            $('#addUserModal').modal('show');
        });

        // getr user from the db ...
        function get_tuser(id) {
            let end_url = api_url + '/users';
            $.ajax({
                url: end_url,
                method: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer',
                },
                data: {
                    id: id
                },
                beforeSend: function() {

                },
                success: function(response) {
                    var html = '';
                    if (response.status == 'sccuess') {
                        if (response.status == 'sccuess') {
                            console.log(response.data[0]);
                            $('#user_id').val(response.data[0].id);
                            $('#user-name').val(response.data[0].name);
                            $('#user-email').val(response.data[0].email);
                            $('#ph_no').val(response.data[0].phone);
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // This function runs if the request encounters an error
                    console.error(textStatus, errorThrown);
                    // You can handle errors or show error messages here
                }
            })
        }

        // getr user from the db ...
        function dell_tuser(status) {
            let end_url = api_url + '/users';
            $.ajax({
                url: end_url,
                method: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer',
                },
                data: {
                    id: id
                },
                beforeSend: function() {

                },
                success: function(response) {
                    var html = '';
                    if (response.status == 'sccuess') {
                        if (response.status == 'sccuess') {
                            console.log(response.data[0]);
                            $('#user_id').val(response.data[0].id);
                            $('#user-name').val(response.data[0].name);
                            $('#user-email').val(response.data[0].email);
                            $('#ph_no').val(response.data[0].phone);
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // This function runs if the request encounters an error
                    console.error(textStatus, errorThrown);
                    // You can handle errors or show error messages here
                }
            })
        }

        // loading data from the db ...
        function load_table(id = null) {
            let end_url = api_url + '/users';
            $.ajax({
                url: end_url,
                method: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer',
                },
                beforeSend: function() {

                },
                success: function(response) {
                    console.log('here')
                    var html = '';
                    if (response.status == 'sccuess') {
                        let index = 1;
                        $.each(response.data, function(key, value) {
                            html += '<tr>'
                            html += '<td>' + index++ + '</td>';
                            html += '<td>' + value.name + '</td>';
                            html += '<td>' + value.email + '</td>';
                            html += '<td>' + value.phone + '</td>';
                            let stat = (value.status == 1) ? '<button class="btn btn-success btn-sm rounded-3" type="button" >Active</button>' : '<button class="btn btn-danger btn-sm rounded-3" type="button" >Deactive</button>';
                            html += '<td>' + stat + '</td>';
                            html += '<td>' +
                                '<ul class="list-inline m-0">' +
                                '<li class="list-inline-item">' +
                                '<button data-id="' + value.id + '" class="btn btn-success btn-sm rounded-0 edit-user" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>' +
                                '</li>' +
                                '<li class="list-inline-item">' +
                                '<button data-id="' + value.id + '" class="btn btn-danger btn-sm rounded-0 dell-user " type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>' +
                                '</li>' +
                                '</ul>' +
                                '</td>';
                            html += '</tr>';
                        });

                        $('#table-data').html(html);
                        $('#bearer_token').val(response.token);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // This function runs if the request encounters an error
                    console.error(textStatus, errorThrown);
                    // You can handle errors or show error messages here
                }
            })
        }
        load_table();

        // storing user into the db ...
        $(document).on('submit', '#user-from', function(e) {
            e.preventDefault();
            var form = $(this);
            var apiname = form.attr('action');
            var end_url = api_url + '/' + apiname;
            var formData = new FormData(this);
            var bearerToken = $('#bearer_token').val();
            $.ajax({
                url: end_url,
                type: 'POST',
                data: formData,
                headers: {
                    'Authorization': 'Bearer ' + bearerToken
                },
                contentType: false,
                processData: false,
                beforeSend: function() {

                },
                success: function(response) {
                    var html = '';
                    if (response.status == 'sccuess') {
                        load_table();
                        $('#addUserModal').modal('hide');
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // This function runs if the request encounters an error
                    console.error(textStatus, errorThrown);
                    // You can handle errors or show error messages here
                }
            })
        });



    });
</script>