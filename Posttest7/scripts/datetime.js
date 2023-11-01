function updateDateTime() {
    var now = new Date();
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    var day = days[now.getDay()];
    var date = now.getDate();
    var month = months[now.getMonth()];
    var year = now.getFullYear();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    var timeZone = now.toLocaleTimeString('en-US', { timeZoneName: 'short' });

    document.getElementById('current-date').textContent = 'Date: ' + day + ', ' + date + ' ' + month + ' ' + year;
    document.getElementById('current-time').textContent = 'Time: ' + hour.toString().padStart(2, '0') + ':' + minute.toString().padStart(2, '0') + ':' + second.toString().padStart(2, '0');
    document.getElementById('time-zone').textContent = 'Time Zone: ' + timeZone;
}

setInterval(updateDateTime, 1000);
updateDateTime();
