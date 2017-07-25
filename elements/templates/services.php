<!DOCTYPE html>
<html lang="en" data-ng-app="website">
<head>
   [[$head]]
</head>
<body class="moto-background">

<div class="page">
	[[$header]]
	<section id="section-content" class="content page-9 moto-section" data-widget="section" data-container="section">
		[[$services]]
	</section>
</div>
[[$footer]]
</body>
</html>

<script>
    $(document).ready(function(){
        $('.container').each(function(){
            var highestBox = 0;
            $('.col-sm-4 ', this).each(function(){
                if($(this).height() > highestBox) {
                    highestBox = $(this).height();
                }
            });
            $('.col-sm-4 ',this).height(highestBox);
        });
    });
</script>