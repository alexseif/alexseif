/* 
 * The following content was designed & implemented under AlexSeif.com
 */


const house = document.querySelector('#house');
const range = document.querySelector('#range');
const label = document.querySelector('#label');

const f = new Flipping();
const update = f.wrap(rooms => {
  const prevRooms = house.getAttribute('data-rooms');
  house.setAttribute('data-prev-rooms', prevRooms);
  house.setAttribute('data-rooms', rooms);

  label.setAttribute('data-prev-rooms', prevRooms);
  label.setAttribute('data-rooms', rooms);
  label.setAttribute('data-rooms-delta', rooms - prevRooms);
});
range.addEventListener('input', e => update(e.target.value));

// start with 3
update(3);

