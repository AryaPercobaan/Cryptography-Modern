    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/pages/dashboards/dashboard1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        // script affine//

        function Encrypt(f) {
            var word, newword, code, newcode, newletter
            var addkey, multkey
            word = f.p.value
            word = word.toLowerCase()
            word = word.replace(/\W/g, "")
            addkey = 0

            for (i = 0; i < f.add.options.length; i++) {
                addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
            }

            multkey = 0

            for (i = 0; i < f.mult.options.length; i++) {
                multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
            }

            newword = ""

            for (i = 0; i < word.length; i++) {
                code = word.charCodeAt(i) - 97
                newcode = ((multkey * code + addkey) % 26) + 97
                newletter = String.fromCharCode(newcode)
                newword = newword + newletter
            }

            f.c.value = newword + " "
        }

        function Decrypt(f) {
            var word, newword, code, newcode, newletter
            var addkey, multkey, multinverse

            word = f.c.value
            word = word.toLowerCase()
            word = word.replace(/\W/g, "")
            addkey = 0

            for (i = 0; i < f.add.options.length; i++) {
                addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
            }

            multkey = 0

            for (i = 0; i < f.mult.options.length; i++) {
                multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
                //if (i==3) alert(multkey +" + "+f.mult.options[i].text + " * " + f.mult.options[i].selected+" = "+(f.mult.options[i].text) * ( f.mult.options[i].selected));
            }

            multinverse = 1

            for (i = 1; i <= 25; i = i + 2) {
                if ((multkey * i) % 26 == 1) {
                    multinverse = i
                }
            }

            newword = ""

            for (i = 0; i < word.length; i++) {
                code = word.charCodeAt(i) - 97
                newcode = ((multinverse * (code + 26 - addkey)) % 26) + 97
                newletter = String.fromCharCode(newcode)
                newword = newword + newletter
            }

            f.p.value = newword.toLowerCase()
        }

        //   //end sffine//


        function encryptTransposisi() {
            var hasil = document.getElementById('hasilEnkripsiTransposisi');
            var form = document.forms["formEncryptTransposisi"];
            var rawPlain = form.elements["plainTransposisi"].value.toUpperCase();
            var key = form["key[]"];

            var plain = rawPlain.split(' ').join('');
            var plainLength = plain.length;
            var arrayPlain = plain.split('');

            var arrayKey = [];
            var kolom = key.length;
            var baris = Math.ceil(plainLength / kolom);
            var arr = new Array(baris);
            var pos = 0;
            var cipher = '';

            for (var i = 0; i < key.length; i++) {
                arrayKey.push(key[i].value);
            }

            for (var i = 0; i < baris; i++) {
                arr[i] = new Array(kolom);
            }

            for (var i = 0; i < baris; i++) {
                for (var j = 0; j < kolom; j++) {
                    if (pos < plainLength) {
                        arr[i][j] = arrayPlain[pos];
                    } else {
                        arr[i][j] = 'X';
                    }
                    pos++;
                }
            }

            for (var i = 0; i < kolom; i++) {
                for (var j = 0; j < baris; j++) {
                    var kol = arrayKey[i] - 1;
                    cipher += arr[j][kol];
                }
            }

            hasil.innerHTML = cipher;
        }

        function decryptTransposisi() {
            var hasil = document.getElementById('hasilDekripsiTransposisi');
            var form = document.forms["formDecryptTransposisi"];
            var rawCipher = form.elements["cipherTransposisi"].value.toUpperCase();
            var key = form["key[]"];

            var cipher = rawCipher.split(' ').join('');
            var cipherLength = cipher.length;
            var arrayCipher = cipher.split('');

            var arrayKey = [];
            var baris = key.length;
            var kolom = Math.ceil(cipherLength / baris);
            var arr = new Array(baris);
            var arr2 = new Array(baris);
            var pos = 0;
            var plain = '';

            for (var i = 0; i < key.length; i++) {
                arrayKey.push(key[i].value);
            }

            for (var i = 0; i < baris; i++) {
                arr[i] = new Array(kolom);
                arr2[i] = new Array(kolom);
            }

            for (var i = 0; i < baris; i++) {
                for (var j = 0; j < kolom; j++) {
                    arr[i][j] = arrayCipher[pos];
                    pos++;
                }
            }

            for (var i = 0; i < baris; i++) {
                for (var j = 0; j < kolom; j++) {
                    var bar = arrayKey.indexOf('' + (i + 1));
                    arr2[i][j] = arr[bar][j];
                    pos++;
                }
            }

            for (var i = 0; i < kolom; i++) {
                for (var j = 0; j < baris; j++) {
                    plain += arr2[j][i];
                }
            }

            hasil.innerHTML = plain;
        }
    </script>