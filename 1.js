/**************************
            Indah Salsabila Putri
***************************/

function count_handshake(people){
  let hasil = 0
  for ( let i = people-1 ; i >= 1 ; i-- ){
    hasil +=i
  }
  return hasil
}


console.log(count_handshake(3));
console.log(count_handshake(6))