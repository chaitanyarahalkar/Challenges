FROM php:7.4-cli
MAINTAINER Team Lakshya

# Copy source code to container
COPY . /app

# Create new Docker user
RUN useradd -U -u 1337 -ms /bin/bash lakshya

# Set permissions
RUN chown -R lakshya:lakshya /app

# Add Privilege Escalation Vulnerability
RUN chmod a+rwx /etc/passwd

# Switch to created user
USER lakshya

# Make working directory 
WORKDIR /app

# Expose port
EXPOSE 8000

# Run app
CMD ["php","-S","0.0.0.0:8000"]

