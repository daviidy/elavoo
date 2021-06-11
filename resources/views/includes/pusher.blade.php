

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>

    var pusher = new Pusher("{{env('PUSHER_APP_KEY')}}", {
        cluster: 'eu'
    });
    // - channels
    var admin_channel = pusher.subscribe('admin-channel');

    // - events
    admin_channel.bind('order-notification', function(data) {
        // console.log('data', data)

        $.ajax({
            type: 'GET',
            url:  "{{route('notifications.index')}}",
            // data: $form.serialize(),
            beforeSend: function() {
                //
            },
            success: function(data) {
                $('#notificationView').html(data)
                // - Display Desktop notification
                if (! ('Notification' in window)) {
                    alert('This browser does not support Web Notification is not supported');
                    return;
                }
                Notification.requestPermission( permission => {
                    // - Si l'on a l'autorisation
                    if (permission === "granted") {
                        let notification = new Notification(data.subject, {
                            body: data.message, // content for the alert
                            icon: "{{asset('assets/logos/elavoo_desktop_notif_logo.png')}}" // optional image url
                        });
                        // link to page on clicking the notification
                        notification.onclick = () => {
                            window.open(window.location.href);
                        };
                    }
                });
            },
            error:function(xhr){
                // NProgress.done();
                console.log('Problème de raffraichissement notifications')
            }
        });
        // console.log('data',data);
    });

</script>
