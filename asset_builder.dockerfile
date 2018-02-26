FROM node:boron-alpine

# Add essential build tools
RUN apk add --no-cache bash build-base automake autoconf libtool libpng-dev nasm

# Create app directory and set as working directory
RUN mkdir -p /opt/arkav
WORKDIR /opt/arkav
RUN chown -R node:node /opt/arkav

# Install app dependencies (done before copying app source to optimize caching)
COPY package.json /opt/arkav/
COPY package-lock.json /opt/arkav/
COPY yarn.lock /opt/arkav/

RUN npm install --quiet

# Build asset every time this container is run
CMD ["npm", "run", "watch"]


