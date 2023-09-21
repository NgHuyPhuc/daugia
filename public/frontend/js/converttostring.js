function convertNumberToWords(number) {
    var units = ['', 'Một', 'Hai', 'Ba', 'Bốn', 'Năm', 'Sáu', 'Bảy', 'Tám', 'Chín'];
    var powersOfTen = ['', 'Nghìn', 'Triệu', 'Tỷ', 'Nghìn Tỷ', 'Triệu Tỷ', 'Tỷ Tỷ'];
  
    var words = '';
  
    if (number === 0) {
      return 'không';
    }
  
    if (number < 0) {
      words += 'âm ';
      number = Math.abs(number);
    }
  
    var chunks = [];
    while (number > 0) {
      chunks.push(number % 1000);
      number = Math.floor(number / 1000);
    }
  
    var numChunks = chunks.length;
    for (var i = numChunks - 1; i >= 0; i--) {
      var chunk = chunks[i];
  
      if (chunk === 0) {
        continue;
      }
  
      var chunkWords = '';
      var hundreds = Math.floor(chunk / 100);
      var tens = Math.floor((chunk % 100) / 10);
      var ones = chunk % 10;
  
      if (hundreds > 0) {
        chunkWords += units[hundreds] + ' Trăm ';
      }
  
      if (tens === 0 && ones > 0) {
        chunkWords += 'Lẻ ';
      }
  
      if (tens === 1 && ones > 0) {
        chunkWords += 'Mười ';
      }
  
      if (tens > 1) {
        chunkWords += units[tens] + ' Mươi ';
      }
  
      if (ones > 0 && tens !== 1) {
        chunkWords += units[ones] + ' ';
      }
  
      chunkWords += powersOfTen[i] + ' ';
      words += chunkWords;
    //   words += 'Đồng';
    }
    
    return words+='VNĐ'.trim();
  }