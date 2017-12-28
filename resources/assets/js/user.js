;
if ($.support.pjax) {
    $.pjax.defaults.timeout = 10000; // time in milliseconds
    $.pjax.defaults.scrollTo = false;
}
$(document).ready(function () {
    $(document).on('submit', '#form-search', function (event) {
        $.pjax.submit(event, '#target');
        event.preventDefault();
        return false;
    });
});
