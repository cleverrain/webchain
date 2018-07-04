$(document).ready( function ()
{

    $('#search-email-button').on('click', function ()
    {
        var email = $('#search-email-input').val();
        $.post('./newsletter/search/' + email, function (data)
        {
            var searchResult = $('#search-result');
            var searchError = $('#search-error');


            if (data.status == 'ok')
            {
                console.log('ok');
                searchError.removeClass('d-block');
                searchError.addClass('d-none');

                searchResult.removeClass("d-none");

                $('#search-id').text(data.id);
                $('#search-email').text(data.email);
                $('#search-created').text(data.created);

                $('#search-enabled').html("");
                $('#search-enabled-action').html("");
                $('#search-delete-action').html("");

                if (data.enabled == 1)
                {
                    $('#search-enabled').append('<b class="text-color-green">Yes</b>');
                    $('#search-enabled-action').append(
                        '<a class="btn btn-info bt-sm" href="./newsletter/disable/'+data.id+'">Disable</a>'
                    );
                }
                else
                {
                    $('#search-enabled').append('<b class="text-color-red">No</b>');
                    $('#search-enabled-action').append(
                        '<a class="btn btn-info bt-sm" href="./newsletter/enabled/'+data.id+'">Enable</a>'
                    );
                }
                $('#search-delete-action').append(
                    '<a class="btn btn-danger bt-sm" href="./newsletter/delete/'+data.id+'">Delete</a>'
                );

            }else
            {
                searchError.removeClass('d-none');
                searchError.addClass('d-block');

                searchResult.addClass("d-none");
            }
        });
    });
});