FROM ubuntu:18.04
MAINTAINER Team Lakshya

# Update Container
RUN apt update && apt install -y python3 python3-pip

# Copy codebase
COPY . /app
WORKDIR /app

# Install dependencies
RUN pip3 install -r requirements.txt

# Run container
CMD ["python3","server.py"]


