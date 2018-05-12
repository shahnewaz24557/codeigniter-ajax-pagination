<!DOCTYPE html>
<html>
<head>
    <title>Ajax JQuery Pagination in Codeigniter using Bootstrap</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container box">
        <h3 align="center">Ajax JQuery Pagination in Codeigniter using Bootstrap</h3>
        <div align="center" id="pagination_link"></div>
        <div class="table-responsive" id="country_table"></div>
    </div>
</body>

</html>

<script>
    $(document).ready(function(){
        function load_country_data(page) {
            $.ajax({
                url:"<?php echo base_url(); ?>ajax_pagination/pagination/"+page,
                method:"GET",
                dataType:"html",
                success:function(data) {
                    $('#country_table').html($('#country_table', data).html());
                    $('#pagination_link').html($('#pagination_link', data).html());
                }
            });
        }

        load_country_data(1);

        $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
        });
    });
</script>
