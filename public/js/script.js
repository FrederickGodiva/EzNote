const updateTime = () => {
  const currentTime = new Date();

  const date = currentTime.getDate();
  const month = currentTime.getMonth() + 1;
  const year = currentTime.getFullYear();
  const hour = currentTime.getHours();
  const minute = currentTime.getMinutes();
  const second = currentTime.getSeconds();

  const formatDate = `${date} / ${month} / ${year}`;
  const formatTime = `${hour} : ${minute} : ${second}`;

  document.querySelector(".date").innerHTML = "Date: " + formatDate;
  document.querySelector(".clock").innerHTML = "Time: " + formatTime;
};

setInterval(updateTime, 1000);

updateTime();
