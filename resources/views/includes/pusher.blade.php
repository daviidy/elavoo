

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>

    // var pusher = new Pusher("{{env('PUSHER_APP_KEY')}}", {
    var pusher = new Pusher("b11950a0b62e9a135104", {
        cluster: 'eu'
    });
    // - channels
    var admin_channel = pusher.subscribe('admin-channel');

    // - events
    admin_channel.bind('order-notification-user-@auth(){{auth()->user()->id}}@endauth', function(dataNotif) {

        console.log('dataNotif 1', dataNotif.notification)

        $.ajax({
            type: 'GET',
            url:  "{{route('notifications.index')}}",
            // data: $form.serialize(),
            beforeSend: function() {
                //
            },
            success: function(data) {

                console.log('dataNotif 2', dataNotif.notification)
                $('#notificationView').html(data)
                // - Display Desktop notification
                if (! ('Notification' in window)) {
                    alert('This browser does not support Web Notification is not supported');
                    return;
                }
                Notification.requestPermission( permission => {
                    // - Si l'on a l'autorisation
                    if (permission === "granted") {
                        let notification = new Notification(dataNotif.notification.subject, {
                            body: dataNotif.notification.message, // content for the alert
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
