<!DOCTYPE html>
<html>

<head>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
    <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    <meta charset="utf-8">
    <title>File Size Program</title>
</head>

<body>
    <div class="well">
        <form data-toggle="validator">

            <div class="form-group form-group-file">
                <input type="file" id="file1" name="file" class="form-control" data-filesize="5000"
                    data-filetype="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf" />
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

{{-- <script>
    $('form[data-toggle="validator"]').validator({
        custom: {
            filesize: function($el) {
                var maxKilobytes = $el.data('filesize') * 1024
                if ($el[0].files[0].size > maxKilobytes) {
                    return "File must be smaller than " + $el.data('filesize') + " kB."
                }
            },

            //custom file type validation
            filetype: function($el) {
                var acceptableTypes = $el.prop('accept').split(',');
                var fileType = $el[0].files[0].type;

                if (!$.inArray(fileType, acceptableTypes)) {
                    return "Invalid file type"
                }


            }
        }
    })
</script> --}}

<script>
    $('form[data-toggle="validator"]').validator({
        custom: {
            filesize: function($el) {
                var minKilobytes = $el.data('filesize') * 1024
                if ($el[0].files[0].size < minKilobytes) {
                    return "File must be greater than 2 MB" 
                }
            }
        }
    })
</script>

</html>
