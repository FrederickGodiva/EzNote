const updateTime = () => {
  const currentTime = new Date();

  const date = currentTime.getDate();
  const month = currentTime.getMonth() + 1;
  const year = currentTime.getFullYear();
  const hour = currentTime.getHours();
  const minute = currentTime.getMinutes();
  const second = currentTime.getSeconds();

  const formatDate = `${date < 10 ? "0" : ""}${date}.${
    month < 10 ? "0" : ""
  }${month}.${year % 100 < 10 ? "0" : ""}${year % 100}`;
  const formatTime = `${hour < 10 ? "0" : ""}${hour} : ${
    minute < 10 ? "0" : ""
  }${minute} : ${second < 10 ? "0" : ""}${second}`;

  document.querySelector(".date").innerHTML = "Date: " + formatDate;
  document.querySelector(".clock").innerHTML = "Time: " + formatTime;
};

setInterval(updateTime, 1000);

updateTime();
