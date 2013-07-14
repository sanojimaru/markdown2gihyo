var toggleRightContent = function() {
    $('#preview').toggle();
    $('#gihyo-output').toggle();
};

$(document).on('click', '#btn-convert', function(e) {
    toggleRightContent();

    var text = $('#markdown-text').val();
    $.post('convert.php', {mode: "gihyo", markdown: text}, function(data, status, xhr) {
        console.debug(data);
        $("#gihyo-text").val(data);
    });

    e.preventDefault();
});

$(document).on('keyup', '#markdown-text', function(e) {
    var text = $('#markdown-text').val();
    console.debug(text);
    $.post('convert.php', {mode: "preview", markdown: text}, function(data, status, xhr) {
        $("#preview-text").html(data);
    });

});

$(document).on('click', '#btn-preview', function(e) {
    toggleRightContent();
});


$(function() {
    console.debug("load");
    $('#gihyo-output').hide();
});