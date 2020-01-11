<html>

<head>

    <title>{block name="title"}Default Title{/block}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var uri = "{$uri}";
        var config = "{$config}";
    </script>
    <script src="{$path}js/engine.js?v=2"></script>
    {block name="addons"}{/block}

</head>

<body>
    {block name="header"}{/block}
    <div id="body"></div>
    {block name="footer"}{/block}
</body>

</html>