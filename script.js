const video=document.querySelector('#webcam');

window.navigator.mediaDevices.getUserMedia({video: true, audio: true})
.then(stream=>
{
    video.srcObject=stream;
    video.onloadmetadata=(e)=>{
        video.play();
    };
}
)
.catch(error=>{
    alert('Enable Mic and camera');
});
