let processScroll = () => {
  let docElem = document.documentElement,
      docBody = document.Body,
      scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
      scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) -window.innerHeight,
      scrollPercent = scrollTop/scrollBottom * 100 + '%';

      console.log(scrollTop + '||' + scrollBottom + '||' +scrollPercent);
}
