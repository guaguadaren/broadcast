
<video autoplay id="sourcevid" style="width:420;height:340px"></video>

<canvas id="output" style="display:none"></canvas>

<script  charset="utf-8">

        var socket = new WebSocket("ws://127.0.0.1:8080");
        var back = document.getElementById('output');
        //获取该canvas的2D绘图环境对象
        var backcontext = back.getContext('2d');
        var video = document.getElementsByTagName('video')[0];
        
        var success = function(stream){
            //createObjectURL() 方法时，都会创建一个新的 URL 对象
            video.src = window.URL.createObjectURL(stream);
        }

        socket.onopen = function(){
            draw();
        }

        var draw = function(){
            try{

//                参数	描述
//                img	规定要使用的图像、画布或视频。
//                sx	可选。开始剪切的 x 坐标位置。
//                sy	可选。开始剪切的 y 坐标位置。
//                swidth	可选。被剪切图像的宽度。
//                sheight	可选。被剪切图像的高度。
//                x	在画布上放置图像的 x 坐标位置。
//                y	在画布上放置图像的 y 坐标位置。
//                width	可选。要使用的图像的宽度。（伸展或缩小图像）
//                height	可选。要使用的图像的高度。（伸展或缩小图像）
                //方法在画布上绘制图像、画布或视频。
                backcontext.drawImage(video,0,0, back.width, back.height);
            }catch(e){
                //文件里面缺少相对应的图片，所以路径找不到
                if (e.name == "NS_ERROR_NOT_AVAILABLE") {
                    return setTimeout(draw, 100);
                } else {
                    throw e;
                }
            }
            if(video.src){
                //将HTML5 Canvas的内容保存为图片 将 canvas 转为 dataURL 形式的 base64 编码
                socket.send(back.toDataURL("image/jpeg", 0.5));
            }
            setTimeout(draw, 100);
        }
        // getUserMedia 获取用户的多媒体
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia || navigator.msGetUserMedia;
        //音频，视频  avigator.getUserMedia ( constraints, successCallback, errorCallback );
        navigator.getUserMedia({video:true, audio:false}, success, console.log);
    </script>