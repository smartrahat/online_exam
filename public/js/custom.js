/**
 * Display selected image on form before store or updating storage
 * Created by: smartrahat on 01.10.2016 12:01AM
 * @param input
 */
function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result).width(150).height(150);
        };

        reader.readAsDataURL(input.files[0]);
    }
}