const primaryFill = document.querySelector('.primaryimage__color')
const switchBtns = document.querySelectorAll('.choose-btn')
const templateImage = document.querySelector('.image')

window.addEventListener('click', (e) => {
  if (e.target.dataset.color) {
    let color = +e.target.dataset.color
    if (e.target.dataset.image == 2) {
      templateImage.src = `${window.location.origin}/wp-content/themes/fence/assets/img/fence-view/2.png`
    } else {
      templateImage.src = `${window.location.origin}/wp-content/themes/fence/assets/img/fence-view/1.png`
    }
    switch (color) {
      case 1:
        primaryFill.style.background = '#A8A08A'
        break
      case 2:
        primaryFill.style.background = '#612B29'
        break
      case 3:
        primaryFill.style.background = '#6A302E'
        break
      case 4:
        primaryFill.style.background = '#702520'
        break
      case 5:
        primaryFill.style.background = '#00497B'
        break
      case 6:
        primaryFill.style.background = '#044C36'
        break
      case 7:
        primaryFill.style.background = '#364130'
        break
      case 8:
        primaryFill.style.background = '#9F9F9F'
        break
      case 9:
        primaryFill.style.background = '#595959'
        break
      case 10:
        primaryFill.style.background = '#46352E'
        break
      case 11:
        primaryFill.style.background = '#373230'
        break
      case 12:
        primaryFill.style.background = '#D9D9D9'
        break

      default:
        break
    }
  }
})
