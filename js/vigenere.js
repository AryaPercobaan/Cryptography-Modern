class Vigenere {
   constructor(...args) {
      this.text = args[0];
      this.key = args[1];
      this.offset = 'a'.charCodeAt(0);
   }

   setText(text) {
      this.text = text;
   }

   getText() {
      return this.text;
   }

   setKey(key) {
      this.key = key;
   }

   getKey() {
      return this.key;
   }

   encode() {
      let result = "";

      for (let i = 0, j = 0; i < this.text.length; i++, j++) {
         let p = this.text.substr(i, 1).toLowerCase().charCodeAt(0) - this.offset;
         let k = this.key.substr(j % this.key.length, 1).toLowerCase().charCodeAt(0) - this.offset;

         if (this.text.substr(i, 1).match(/[a-z]/g) ) {
            result += String.fromCharCode( ((p+k) % 26) + this.offset)
         } else if (this.text.substr(i, 1).match(/[A-Z]/g) ) {
            result += String.fromCharCode( ((p+k) % 26) + this.offset).toUpperCase()
         } else {
            result += String.fromCharCode(p + this.offset);
            --j;
         }
      }
      return result;
   }

   decode() {
      let result = "";

      for(let i = 0, j = 0; i < this.text.length; i++, j++) {
         let c = this.text.substr(i, 1).toLowerCase().charCodeAt(0) - this.offset;
         let k = this.key.substr(j % this.key.length, 1).toLowerCase().charCodeAt(0) - this.offset;

         if (this.text.substr(i, 1).match(/[a-z]/g)) {
            if( (c - k) > 0 )
               result += String.fromCharCode( (c - k) % 26 + this.offset);
            else
               result += String.fromCharCode( (c - k + 26) % 26 + this.offset);
         } else if (this.text.substr(i, 1).match(/[A-Z]/g)) {
            if( (c - k) > 0 )
               result += String.fromCharCode( (c - k) % 26 + this.offset).toUpperCase();
            else
               result += String.fromCharCode( (c - k + 26) % 26 + this.offset).toUpperCase();
         } else {
            result += String.fromCharCode(c + this.offset);
            --j;
         }
      }

      return result;
   }
}
let vigenere = new Vigenere();
