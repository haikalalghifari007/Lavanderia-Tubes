var NumberOfWords = 28;

var words = new BuildArray(NumberOfWords);

// Use the following variables to
// define your random words:
words[1] = "31BSS";
words[2] = "SA12K";
words[3] = "A2IB3";
words[4] = "2VVH2";
words[5] = "WUJ22";
words[6] = "AADJJ";
words[7] = "SJASSA";
words[8] = "LNJDAB";
words[9] = "JBAJ22";
words[10] = "KJ1J4";
words[11] = "H1L2E";
words[12] = "LKNGO";
words[13] = "DI222";
words[14] = "J1B12";
words[15] = "111JN";
words[16] = "JB122";
words[17] = "JHUI1";
words[18] = "JB2O3";
words[19] = "JKABA";
words[20] = "001NA";
words[21] = "UQEBU";
words[22] = "OI1OW";
words[23] = "JIB1O";
words[24] = "IOH19";
words[25] = "JBI22";
words[26] = "NOQU1";
words[27] = "JBJI2";
words[28] = "KJB1I";

function BuildArray(size) {
  this.length = size;
  for (var i = 1; i <= size; i++) {
    this[i] = null;
  }
  return this;
}

function PickRandomWord(frm) {
  // Generate a random number between 1 and NumberOfWords
  var rnd = Math.ceil(Math.random() * NumberOfWords);

  // Display the word inside the text box
  frm.WordBox.value = words[rnd];
}
