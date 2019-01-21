// Task 1 start
let num = prompt('Enter a number:', '')

if (num > 10) {
  console.log('This number is more than 10')
} else {
  console.log('This number is less than 10')
}
//task 1 end

// Task 2 start
let lang = prompt('Введите lang: ru or en')

switch (lang) {
  case 'ru':
    let ru = [
      'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август',
      'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
    ]
    console.log(ru)
    break
  case 'en':
    let en = [
      'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
      'September', 'October', 'November', 'December'
    ]
    console.log(en)
    break
  default:
    console.log('Error')
    break
}
// Task 2  end

//Task 3 start
let arr = [12, 10, 11, 32, 44, 34, 76, 0, 9, 1]

for (let i = 1; i < arr.length; i++) {
  if (i % 2 === 0) {
    console.log('arr - ' + arr[i])
  }
}
//Task 3 end

//Task 4 start
let i = 1
while (i <= 15) {
  console.log(i + ' ')
  i += 1
}
//Task 4 end

//Task 5 start
console.log('plus - ' + plus(10, 15))
console.log('minus - ' + minus(15, 5))
console.log('umnozit - ' + umnozit(15, 5))
console.log('razdelit - ' + razdelit(15, 5))

function plus (a, b) {
  return a + b
}

function minus (a, b) {
  return a - b
}

function umnozit (a, b) {
  return a * b
}

function razdelit (a, b) {
  return a / b
}

//Task 5 end


