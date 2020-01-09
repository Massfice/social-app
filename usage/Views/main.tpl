<html>

<head>

    <title>{block name="title"}Default Title{/block}</title>
    {block name="addons"}{/block}
    <script>
        var uri = "{$uri}";
        var config = "{$config}";
    </script>

</head>

<body>
    {block name="header"}{/block}
    <div id="body"></div>
    {block name="footer"}{/block}
</body>

</html>