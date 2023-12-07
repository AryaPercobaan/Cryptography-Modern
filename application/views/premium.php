<!DOCTYPE html>
<html lang="en">
<style>
    #container2 {
  text-align: center;
  max-width: 450px;
  margin: 0 auto;
}
.block {
  width: 200px;
  height: 200px;
  margin: 10px;
  display: inline-block;
  background: #00CC99;
}

.dragbox {
        width: 400px;
        height: 150px;
        margin: auto;
        background-color: #90cbe6;
        border: 1px dashed #01293c;
        animation: progress-bar-stripes 1s linear infinite;
      }
      .progress-bar-striped {
        background-image: linear-gradient(
          45deg,
          hsla(0, 0%, 100%, 0.15) 25%,
          transparent 0,
          transparent 50%,
          hsla(0, 0%, 100%, 0.15) 0,
          hsla(0, 0%, 100%, 0.15) 75%,
          transparent 0,
          transparent
        );
        background-size: 1rem 1rem;
      }
      .dragbox-over {
        background-color: #4cb9f9;
      }
      .text-vertical-center {
        position: relative;
        top: 50%;
        transform: translate(0, -50%);
      }
      
</style>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - ARJID</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../assets/img/navbar-logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bar s ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="btn btn-danger btn-rounded waves-effect waves-light mb-4" href="#kriptografi">Praktek</a></li>
                    <li class="nav-item"><a class="btn btn-warning btn-rounded waves-effect waves-light mb-4" href="<?= base_url(); ?>Home">Back</a></li>

                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
   
        <div class="container">
           <section class="page-section bg-light" id="kriptografi">
           <img class="img-fluid" src="../assets/img/logo2.png" alt="..." style="width:400px;"/> <br> 
           <hr>
           <div id="container2">
                 <div class="block">
                    
                 <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <img class="img-fluid" src="../assets/img/algoritma/rsa.png" alt="..." />     </a>
                    </div>
                 
                </div>
                 <div class="block">

                 <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <img class="img-fluid" src="../assets/img/algoritma/rsa2.png" alt="..." />     </a>
                    </div>

                 </div>
                 <div class="block">
                    
                 <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <img class="img-fluid" src="../assets/img/algoritma/aes.png" alt="..." />     </a>
                    </div>
                 
                </div>
                 <div class="block">

                 <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <img class="img-fluid" src="../assets/img/algoritma/aes2.png" alt="..." />     </a>
                    </div>

                 </div>
            </div>
            </section>
           <br>
         
           <br>
            <div class="masthead-heading text-uppercase"></div>
                      
          
        </div>

    </header>


    
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                
                                <h2 class="col-12 text-center pb-3">Set Kunci RSA</h2>
      <span class="col-12 text-center pb-3 text-danger">Pasangkan kunci terlebih dahulu. Tidak disarankan untuk me refresh halaman ketika sedang memasukkan plaintext! </span>
      <label>Public Key</label>
      <textarea id="pub" rows="5" class="col-12" readonly></textarea>
      <label>Private Key</label>
      <textarea id="pri" rows="5" class="col-12" readonly></textarea>
      <div class="col-12 text-center mt-3 mb-3">
        <button class="m-auto btn btn-primary" onclick="getRsaKeys()">
          Refresh Key
        </button>
      </div>
    </div>
    <div class="row p-5 border mt-4">
      <h2 class="col-12 text-center pb-5">
        Masukkan Plainteks RSA
      </h2>
      <label>Plain text (Max string length is 117 characters)</label>
      <textarea class="col-12" rows="1" id="plainText"></textarea>
      <div class="col-12 text-center mt-3 mb-3">
        <button class="m-auto btn btn-primary" onclick="encryptRSA()">
          Encrypt
        </button>
      </div>
      <label>Encrypted text (Max string length is 172 characters)</label>
      <textarea class="col-12" rows="3" id="encryptedText"></textarea>
      <div class="col-12 text-center mt-3">
        <button class="m-auto btn btn-primary" onclick="decryptRSA()">
          Decrypt
        </button>
      </div>
      <label>Decrypted text</label>
      <textarea class="col-12" rows="1" id="decryptedText"></textarea>
    </div>

                                <ul class="list-inline">
                                   
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                
                                <div class="row p-5 border mt-4">
      <h2 class="col-12 text-center pb-3">
        Masukkan File Enkripsi & Dekripsi RSA
      </h2>
      <span class="col-12 text-center pb-3 text-danger">Tempelkan file yang ingin di enkrisi atau dekripsi. (Ukuran file tidak disarankan lebih dari 1MB!)</span>
      <div class="dragbox mt-2 text-center" id="encryptionDropBox">
        <p class="text-vertical-center">
          <strong>Letakkan File disini untuk di enkripsi..</strong>
        </p>
      </div>
      <div class="dragbox mt-2 text-center" id="decryptionDropBox">
        <p class="text-vertical-center">
          <strong>Letakkan File disini untuk di dekripsi..</strong>
        </p>
      </div>
    </div>
                                <ul class="list-inline">
                                   
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                
                                <div class="row p-5 border mt-4">
      <h2 class="col-12 text-center pb-3">
        Masukkan Plainteks AES
      </h2>
      <span class="col-12 text-center pb-3 text-danger">Hanya perlu memasukkan teks dan kata sandi untuk di enkripsi!</span>
      <div class="col-12">
        <label>Text to encrypt</label>
        <input class="form-control" id="aes-plain-text" />
        <label>Enter the password for AES</label>
        <input class="form-control" id="aes-password" />
        <div class="col-12 text-center">
          <button
            id="aes-text-encrypt-decrypt"
            class="mt-5 mb-5 btn btn-primary"
          >
            Start
          </button>
        </div>
        <div class="col-12 border mb-5"></div>
        <h3 class="col-12 text-center pt-2">Text encrypted and decrypted</h3>
        <label>Encrypted text by AES</label>
        <textarea
          id="encrypted-aes-text"
          class="form-control"
          readonly
        ></textarea>
        <label>Decrypted text by AES</label>
        <textarea
          id="decrypted-aes-text"
          class="form-control"
          readonly
        ></textarea>
        <h3 class="col-12 text-center pt-2">
          AES password encrypted & decrypted
        </h3>
        <label>Encrypted AES </label>
        <textarea
          id="encrypted-aes-pwd"
          class="form-control"
          readonly
        ></textarea>
        <label>Decrypted AES </label>
        <textarea
          id="decrypted-aes-pwd"
          class="form-control"
          readonly
        ></textarea>
      </div>
    </div>
                                <ul class="list-inline">
                                   
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                
                                <div class="row p-5 border mt-4 mb-5">
      <h2 class="col-12 text-center pb-3">
      Masukkan File Enkripsi & Dekripsi AES
      </h2>
      <span class="col-12 text-center pb-3 text-danger">Tempelkan file yang mau di enkripsi dan dekripsi!. (Disarankan ukuran file tidak lebih dari 20MB)</span>
      <label>AES password (plain text):</label>
      <input class="form-control" id="aes-password-file" />
      <label>AES password :</label>
      <textarea
        class="form-control mb-4"
        id="aes-password-file-encrypted"
        readonly
      ></textarea>
      <div class="dragbox mt-2 text-center" id="encryptionDropBox-AES">
        <p class="text-vertical-center">
          <strong>Drag your file here to encrypt</strong>
        </p>
      </div>
      <div class="dragbox mt-2 text-center" id="decryptionDropBox-AES">
        <p class="text-vertical-center">
          <strong>Drag your encrypted file here to decrypt</strong>
        </p>
      </div>
    </div>

                                <ul class="list-inline">
                                   
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


    
  <!-- JS, Popper.js, and jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/3.0.0-rc.1/jsencrypt.min.js"></script>
  <script>
    var publicKey = "";
    var privateKey = "";

    window.onload = () => {
      getRsaKeys();
    };

    $("#encryptionDropBox").on("dragover", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("dragbox-over");
    });
    $("#encryptionDropBox").on("dragleave", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).removeClass("dragbox-over");
    });
    $("#encryptionDropBox").on("drop", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("progress-bar-striped");
      var file = evt.originalEvent.dataTransfer.files[0];
      setTimeout(async () => {
        await fileEncryptRSA(file);
        $(this).removeClass("progress-bar-striped");
        $(this).removeClass("dragbox-over");
      }, 1000);
    });
    $("#decryptionDropBox").on("dragover", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("dragbox-over");
    });
    $("#decryptionDropBox").on("dragleave", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).removeClass("dragbox-over");
    });
    $("#decryptionDropBox").on("drop", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("progress-bar-striped");
      var file = evt.originalEvent.dataTransfer.files[0];
      setTimeout(async () => {
        await fileDecryptRSA(file);
        $(this).removeClass("progress-bar-striped");
        $(this).removeClass("dragbox-over");
      }, 1000);
    });
    //plainText encryption (max = 117)
    function encryptRSA(data) {
      if (data === undefined) {
        data = $("#plainText").val();
      }
      var encrypt = new JSEncrypt();
      encrypt.setPublicKey(publicKey);
      var result =
        encrypt.encrypt(data) == null ? "Failed" : encrypt.encrypt(data);
      document.getElementById("encryptedText").value = result;
      return result;
    }
    //plainText decryption (max = 172)
    function decryptRSA(data) {
      if (data === undefined) {
        data = $("#encryptedText").val();
      }
      var decrypt = new JSEncrypt();
      decrypt.setPrivateKey(privateKey);
      var result =
        decrypt.decrypt(data) == null ? "Failed" : decrypt.decrypt(data);
      document.getElementById("decryptedText").value = result;
      return result;
    }

    //read file in 10 based which convert from 8 bits binary, then encrypt the bytecode
    function fileEncryptRSA(file) {
      var filename = file.name;
      var reader = new FileReader();
      reader.readAsArrayBuffer(file);
      reader.onload = function (evt) {
        if (evt.target.readyState == FileReader.DONE) {
          var arrayBuffer = evt.target.result;
          var arrayString = new Uint8Array(arrayBuffer).toString();
          var encrypt = new JSEncrypt();
          encrypt.setPublicKey(document.getElementById("pub").value);
          var maxLength = 117;
          var count =
            Math.ceil(arrayString.length / maxLength) > 0
              ? Math.ceil(arrayString.length / maxLength)
              : 1;
          var encryptedData = "";
          for (let i = 0; i < count; i++) {
            var temp = "";
            for (
              let ii = i * maxLength;
              ii < (i + 1) * maxLength && ii < arrayString.length;
              ii++
            ) {
              temp += arrayString[ii];
            }
            encryptedData += encrypt.encrypt(temp);
          }
          downFlie(encryptedData, "encrypted." + filename + ".sc.encrypt");
        }
      };
    }

    //read file in 10 based which convert from 8 bits binary, then decrypt the encrypted text
    function fileDecryptRSA(file) {
      var filename = file.name;
      var reader = new FileReader();
      reader.readAsArrayBuffer(file);
      reader.onload = function (evt) {
        if (evt.target.readyState == FileReader.DONE) {
          var arrayBuffer = evt.target.result;
          var array = new Uint8Array(arrayBuffer);
          var decrypt = new JSEncrypt();
          decrypt.setPrivateKey(document.getElementById("pri").value);
          var maxBufferLength = 172;
          var count =
            Math.ceil(array.length / maxBufferLength) > 0
              ? Math.ceil(array.length / maxBufferLength)
              : 1;
          var decryptedBin = "";
          for (var i = 0; i < count; i++) {
            var temp = "";
            for (
              var ii = i * maxBufferLength;
              ii < (i + 1) * maxBufferLength && ii < array.length;
              ii++
            ) {
              temp += String.fromCharCode(array[ii]);
            }
            decryptedBin += decrypt.decrypt(temp); //10 base numbers for each byte
          }

          decryptedBin = decryptedBin.split(",");
          var decryptedData = [];
          decryptedBin.forEach((element) => {
            decryptedData.push(parseInt(element));
          });
          decryptedData = new Uint8Array(decryptedData);
          downFlie(
            decryptedData.buffer,
            "decrypted." +
              filename.replace("encrypted.", "").replace(".sc.encrypt", "")
          );
        }
      };
    }

    //download file
    function downFlie(buffer, filename) {
      var elementA = document.createElement("a");
      elementA.download = filename;
      elementA.style.display = "none";
      try {
        var file = new Blob([buffer]);
        elementA.href = URL.createObjectURL(file);
        document.body.appendChild(elementA);
        elementA.click();
        document.body.removeChild(elementA);
      } catch (e) {
        console.log(e);
      }
    }
  </script>
  <!--AES + RSA-->
  <script>
    //aes password
    var password = "";
    var encryptPassword = "";

    $("#aes-text-encrypt-decrypt").on("click", function () {
      var myString = $("#aes-plain-text").val();
      var myPassword = $("#aes-password").val();
      if (myString == "") return alert("Text cannot be empty");
      if (myPassword == "") return alert("Password cannot be empty");
      var encryptedText = CryptoJS.AES.encrypt(myString, myPassword);
      $("#encrypted-aes-text").html(encryptedText.toString());
      var encryptedPwd = encryptRSA(myPassword);
      $("#encrypted-aes-pwd").html(encryptedPwd.toString());
      var decryptedPwd = decryptRSA(encryptedPwd);
      $("#decrypted-aes-pwd").html(decryptedPwd.toString());
      var decryptedText = CryptoJS.AES.decrypt(
        encryptedText,
        decryptedPwd.toString()
      );
      $("#decrypted-aes-text").html(decryptedText.toString(CryptoJS.enc.Utf8));
    });

    function fileEncryptAES(file) {
      var filename = file.name;
      var reader = new FileReader();
      reader.readAsArrayBuffer(file);
      reader.onload = function (evt) {
        if (evt.target.readyState == FileReader.DONE) {
          var arrayBuffer = evt.target.result;
          var fileInString = new Uint8Array(arrayBuffer).toString();
          var password = "";
          var encryptedData = CryptoJS.AES.encrypt(fileInString, password);
          downFlie(encryptedData, "encrypted." + filename + ".sc.encrypt");
          encryptPassword = encryptRSA(password);
          $("#aes-password-file-encrypted").val(encryptPassword);
        }
      };
      return true;
    }

    function fileDecryptAES(file) {
      var filename = file.name;
      var reader = new FileReader();
      reader.readAsArrayBuffer(file);
      reader.onload = function (evt) {
        if (evt.target.readyState == FileReader.DONE) {
          var arrayBuffer = evt.target.result;
          var array = new Uint8Array(arrayBuffer);
          var encryptedString = "";
          $.each(array, (index, item) => {
            encryptedString += String.fromCharCode(item);
          });
          var decryptedPwd = decryptRSA(encryptPassword);

          var decryptedFileInString = CryptoJS.AES.decrypt(
            encryptedString,
            decryptedPwd.toString()
          ).toString(CryptoJS.enc.Utf8);

          var decryptedData = [];
          decryptedFileInString.split(",").forEach((element) => {
            decryptedData.push(parseInt(element));
          });

          decryptedData = new Uint8Array(decryptedData);
          downFlie(
            decryptedData.buffer,
            "decrypted." +
              filename.replace("encrypted.", "").replace(".sc.encrypt", "")
          );
        }
      };
      return true;
    }

    $("#encryptionDropBox-AES").on("dragover", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("dragbox-over");
    });
    $("#encryptionDropBox-AES").on("dragleave", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).removeClass("dragbox-over");
    });
    $("#encryptionDropBox-AES").on("drop", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      var file = evt.originalEvent.dataTransfer.files[0];
      if(file.size > 21000000) return alert("File is too big, exceed the max of 20 Mb.");
      password = Math.random().toString(36).substring(7); //random pwd
      $("#aes-password-file").val(password);
      setTimeout(() => {
        $(this).addClass("progress-bar-striped");
        var tem = setTimeout(() => {
          var x = fileEncryptAES(file);
          var tem = setInterval(() => {
            if (x) {
              $(this).removeClass("progress-bar-striped");
              $(this).removeClass("dragbox-over");
              clearInterval(tem);
            }
          }, 1000);
        }, 1000);
      }, 0);
    });
    $("#decryptionDropBox-AES").on("dragover", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).addClass("dragbox-over");
    });
    $("#decryptionDropBox-AES").on("dragleave", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      $(this).removeClass("dragbox-over");
    });
    $("#decryptionDropBox-AES").on("drop", function (evt) {
      evt.preventDefault();
      evt.stopPropagation();
      var file = evt.originalEvent.dataTransfer.files[0];
      setTimeout(() => {
        $(this).addClass("progress-bar-striped");
        setTimeout(() => {
          var x = fileDecryptAES(file);
          var tem = setInterval(() => {
            if (x) {
              $(this).removeClass("progress-bar-striped");
              $(this).removeClass("dragbox-over");
              clearInterval(tem);
            }
          }, 1000);
        }, 1000);
      }, 0);
    });
  </script>
  <!--RSA key generator-->
  <script>
    function getRsaKeys(func) {
      window.crypto.subtle
        .generateKey(
          {
            name: "RSA-OAEP",
            modulusLength: 1024, //can be 1024, 2048, or 4096
            publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
            hash: { name: "SHA-512" }, //can be "SHA-1", "SHA-256", "SHA-384", or "SHA-512"
          },
          true, //whether the key is extractable (i.e. can be used in exportKey)
          ["encrypt", "decrypt"] //must be ["encrypt", "decrypt"] or ["wrapKey", "unwrapKey"]
        )
        .then(function (key) {
          window.crypto.subtle
            .exportKey("pkcs8", key.privateKey)
            .then(function (priKeyBuffer) {
              window.crypto.subtle
                .exportKey("spki", key.publicKey)
                .then(function (pubKeyBuffer) {
                  privateKey = RSA2text(priKeyBuffer, 1);
                  publicKey = RSA2text(pubKeyBuffer);
                  document.getElementById("pub").value = publicKey;
                  document.getElementById("pri").value = privateKey;
                })
                .catch(function (err) {
                  console.log(err);
                });
            })
            .catch(function (err) {
              console.log(err);
            });
        })
        .catch(function (err) {
          console.log(err);
        });
    }
    function RSA2text(buffer, isPrivate = 0) {
      var binary = "";
      var bytes = new Uint8Array(buffer);
      var len = bytes.byteLength;
      for (var i = 0; i < len; i++) {
        binary += String.fromCharCode(bytes[i]);
      }
      var base64 = window.btoa(binary);
      var text =
        "-----BEGIN " + (isPrivate ? "PRIVATE" : "PUBLIC") + " KEY-----\n";
      text += base64
        .replace(/[^\x00-\xff]/g, "$&\x01")
        .replace(/.{64}\x01?/g, "$&\n");
      text += "\n-----END " + (isPrivate ? "PRIVATE" : "PUBLIC") + " KEY-----";
      return text;
    }
  </script>
</body>

</html>