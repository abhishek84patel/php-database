const imageInput = document.getElementById("photo");
const signatureinput = document.getElementById("signature");
const imageOutput = document.getElementById("img");
const sigOutput = document.getElementById("Signature-Img");
console.log(imageOutput)
console.log(sigOutput)
// if(signatureinput.file===0){
// if (signatureinput.files.length === 0) {
//     alert("Please upload a passport size file");
//   }
function passId(args , imgID) {
//   console.log(imgID)
  args.addEventListener("change", function () {
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = function () {
      console.log(imgID);
      // image.src = reader.result;
      imgID.src = reader.result;
      // document.body.appendChild(image);
    };
    reader.readAsDataURL(file);
  });
}



