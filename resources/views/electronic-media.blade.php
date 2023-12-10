{{-- @extends('layouts.master')

@section('title', 'Electronic_media')

@section('content')
<section class="page-bg">
    <div class="container">
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <h1 class="page-title">Electronic Media</h1>
            <p class="page-desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
            <button class="page-btn"> <a href="{{route('home')}}">Home</a>  <i class="fas fa-arrow-right"></i> Electronic</button>         
          </div>        
      </div>
</section>


 
 
@endsection --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Latest Facebook Post</title>
</head>
<body>
  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FBCGD.DIU%2Fposts%2Fpfbid0RZb1LihBTKmdd2fLtH46grGmyHxff7nBTCwMShQ22XrmiX27srMzsEi8zLaK68R5l&show_text=true&width=500" width="500" height="530" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

    <div id="latest-post-container">
        <!-- The latest post will be displayed here -->
    </div>

    <script>
        $(document).ready(function() {
          alert('ok')
            // Replace these values with your actual Page ID and Access Token
            var pageId = '106084145639329';
            var accessToken = 'your-access-token';

            // Make a request to the Graph API
            $.ajax({
                url: 'https://graph.facebook.com/v12.0/' + pageId + '/feed',
                type: 'GET',
                data: {
                    access_token: accessToken,
                    limit: 1
                },
                success: function(response) {
                    // Extract relevant information from the response
                    var latestPost = response.data[0];

                    // Display the latest post on the website
                    $('#latest-post-container').html('<p>' + latestPost.message + '</p>');

                    // You can include other information such as images, links, etc.
                },
                error: function(error) {
                    console.error('Error fetching Facebook data:', error);
                }
            });
        });
    </script>

</body>
</html>
