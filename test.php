<head>
    <script src="scripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.dd.js" type="text/javascript"></script>
    <link rel="stylesheet" href="scripts/dd.css">
</head>
<body>
<script language="javascript">
    $(document).ready(function(e) {
        try {
            $("body select").msDropDown();
        } catch(e) {
            alert(e.message);
        }
    });
</script>
<select name="" id="">
    <option data-image="files/tool.png">1</option>
    <option data-image="files/tool.png">2</option>
    <option data-image="files/tool.png">3</option>
    <option data-image="files/tool.png">4</option>
    
</select>
</body>