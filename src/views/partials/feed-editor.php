<div class="box feed-new">
    <div class="box-body">
        <div class="feed-new-editor m-10 row">
            <div class="feed-new-avatar">
                <img src="<?=$base;?>/media/avatars/<?=$user->avatar;?>" />
            </div>
            <div class="feed-new-input-placeholder">O que você está pensando, <?=$user->name;?>?</div>
            <div class="feed-new-input" contenteditable="true"></div>
            <div class="feed-new-photo">
                <img src="<?=$base;?>/assets/images/photo.png">
                <input type="file" name="photo" class="feed-new-file" accept="image/png, image/jpg, image/jpeg">
            </div>
            <div class="feed-new-send">
                <img src="<?=$base;?>/assets/images/send.png" />
            </div>
            <form class="feed-new-form" method="post" action="<?=$base;?>/post/new">
                <input type="hidden" name="body">
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
let feedInput = document.querySelector('.feed-new-input');
let feedSubmit = document.querySelector('.feed-new-send');
let feedForm = document.querySelector('.feed-new-form');
let feedPhoto = document.querySelector('.feed-new-photo');
let feedFile = document.querySelector('.feed-new-file');

feedPhoto.addEventListener('click', function(){
    feedFile.click();
});

feedFile.addEventListener('change', async function(){
    let photo = feedFile.files[0];

    let formData = new FormData();
    formData.append('photo', photo);

    let req = await fetch(BASE+'/ajax/upload', {
        method: 'POST',
        body: formData
    });
    let json = await req.json();

    if(json.error != '') {
        alert(json.error);
    }

    window.location.href = window.location.href;
});

feedSubmit.addEventListener('click', function(obj){
    let value = feedInput.innerText.trim();

    if(value != ''){
        feedForm.querySelector('input[name=body]').value = value;
        feedForm.submit();
    }
});
</script>