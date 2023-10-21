FROM debian:latest

RUN apt update && apt upgrade -y
RUN apt install git python3-pip ffmpeg -y

RUN cd /
RUN git clone https://github.com/redaiq90/MegaDL-Bot
RUN cd MegaDL-Bot
WORKDIR /MegaDL-Bot

RUN pip install -U -r requirements.txt

CMD python main.py
