FROM debian:latest
RUN pip install virtualenv

# Create and activate a virtual environment
RUN virtualenv venv
RUN . venv/bin/activate

# Copy your Python application code into the container
COPY . /app
RUN apt update && apt upgrade -y
RUN apt install git python3-pip ffmpeg -y

RUN cd /
RUN git clone https://github.com/redaiq90/MegaDL-Bot
RUN cd MegaDL-Bot
WORKDIR /MegaDL-Bot

RUN pip install -U -r requirements.txt

CMD python main.py
