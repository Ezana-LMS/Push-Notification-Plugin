<!DOCTYPE html>
<html>

<head>
    <title>Devlan LMS - Pusher Light Weight Push Notification</title>
</head>

<body>
    <link rel="manifest" href="manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "3b4e760b-84eb-46ed-99bb-ea57cac79ff8",
            });
        });
        OneSignal.push(function() {
            OneSignal.on('subscriptionChange', function(isSubscribed) {
                if (isSubscribed) {
                    OneSignal.getUserId(function(userId) {});
                } else {
                    console.log("Thanks a lot!! unsubscribed");
                }
            });
        });
    </script>
</body>

</html>