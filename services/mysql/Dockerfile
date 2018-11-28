FROM mysql:5.7

# set timezome
ENV TIME_ZONE=${TIME_ZONE}
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone