function animateBox() {
  let win = null;
  const square = document.getElementById('square');
  const pos = {
    left: square.offsetLeft,
    top: square.offsetTop,
    dir: 1,
    move: 'v',
    dis: 10
  };
  let is_running = true;
  const transitoinEventName = (w => {
    let transition = false;
    if ('ontransitionend' in w) {
      transition = 'transitionend';
    } else if ('onwebkittransitionend' in w) {
      transition = 'webkitTransitionEnd';
    } else if ('onotransitionend' in myDiv || navigator.appName == 'Opera') {
      transition = 'oTransitionEnd';
    }
    return transition;
  })(window);

  function setWinSize(e) {
    win = {
      w: Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
      h: Math.max(
        document.documentElement.clientHeight,
        window.innerHeight || 0
      )
    };
  }

  function onMoveEnd() {
    if (
      square.offsetWidth + square.offsetLeft + 2 >= win.w ||
      square.offsetHeight + square.offsetTop + 2 >= win.h
    ) {
      pos.dir = -1;
    } else if (pos.dir === -1 && square.offsetLeft <= 2) {
      pos.dir = 1;
    } else {
      pos.move = pos.move === 'h' ? 'v' : 'h';
    }
  }

  function move() {
    if (!is_running) {
      return;
    }

    const l_or_t = pos.move === 'v' ? 'left' : 'top';
    pos[l_or_t] = pos[l_or_t] + pos.dir * pos.dis;
    square.style[l_or_t] = pos[l_or_t] + 'px';

    if (!transitoinEventName) {
      const t = setTimeout(() => {
        onMoveEnd();
        clearTimeout(t);
      }, 320);
    }
  }

  setWinSize();
  if (transitoinEventName) {
    square.addEventListener(transitoinEventName, onMoveEnd, false);
  }

  // Not part of puzzle, just as fun :-)
  window.onresize = setWinSize;
  window.onblur = () => (is_running = false);
  window.onfocus = () => (is_running = true);

  // start
  setInterval(move, 500);
}

window.onload = animateBox;
