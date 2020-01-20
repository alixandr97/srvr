FROM debian:buster
#workdir /
COPY srcs /
#COPY srcs/scripte.sh /
RUN bash script.sh
CMD bash start_services.sh
#CMD tail -f /dev/null
EXPOSE 80 443
#CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
