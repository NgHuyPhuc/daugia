<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var funcNum = <?php echo $_GET['CKEditorFuncNum'] . ';'; ?>
            $('#img_list').on('click', 'img', function() {
                var fileUrl = $(this).attr('title');
                window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
                window.close();
            })
        })
    </script>

    <style type="text/css">
        ul.file-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul.file-list li {
            float: left;
            margin: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            max-width: 130px;
            max-height: 130px;
        }

        ul.file-list img {
            display: block;
            margin: 0 auto;
        }

        ul.file-list li:hover {
            background: cornsilk;
            cursor: pointer;
        }

        .file-name {
            display: inline-block;
            width: 120px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    {{-- @dd($fileNames) --}}
    <div id="img_list">
        @foreach ($fileNames as $file)
            <div class="thumbnail">
                <ul class="file-list">
                    <li>
                        <img src="{{ asset('upload/ckeditor/' . $file) }}" alt="thumb"
                            title="{{ asset('upload/ckeditor/' . $file) }}" width="120" height="120">
                        <br />
                        <span class="file-name" style="color:blue">{{ $file }}</span>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</body>

</html>
