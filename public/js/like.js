
/*
*click of like btn without page reload
*/ 

$('document').ready(function(){
    let PostId = $('#LikeBtn').value();
    $('#LikeBtn').click(function(event){
        //make an ajax call
        event.preventDefault();
        postId = event.target.parentNode.parentNode.dataset['postid'];
        console.log(PostId);

        // $.ajax({
        //     method: 'POST',
        //     url: '/like/user',
        //     data: {isLike: isLike, postId: postId, _token: token}
        //     data: {postId: postId}
        // })
        //     .done(function() {
                
        //     });
        });
});