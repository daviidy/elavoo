<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('cf4fcfe6fc9f933d6fd7', {
      cluster: 'eu'
    });
    // - channels
    var channel = pusher.subscribe('my-channel');
    var admin_channel = pusher.subscribe('admin-channel');

    // - events
    channel.bind('my-event', function(data) {
      console.log(JSON.stringify(data));
    });
    channel.bind('status-liked', function(data) {
      alert(JSON.stringify(data));
    });


    admin_channel.bind('order-assign', function(data) {
      console.log(data);
    });

  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>
