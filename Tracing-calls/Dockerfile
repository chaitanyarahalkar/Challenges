FROM ubuntu:latest
MAINTAINER Lakshya CTF Team

RUN apt update && apt -y install ltrace sudo

COPY gotty /usr/bin/gotty
COPY runme /home/lakshya/runme
COPY flag.txt /root/flag.txt
COPY phrase.txt /root/phrase.txt

RUN chmod a+x /usr/bin/gotty
RUN chmod a+x /home/lakshya/runme
RUN chown root:root /root/flag.txt /root/phrase.txt
RUN chmod o-r /root/flag.txt /root/phrase.txt
RUN chmod +s /home/lakshya/runme 


RUN useradd -u 1337 -U lakshya
RUN echo "lakshya ALL=(root:root) NOPASSWD:/usr/bin/ltrace" >> /etc/sudoers
USER lakshya
WORKDIR /home/lakshya

CMD gotty -w -p $PORT /bin/bash

