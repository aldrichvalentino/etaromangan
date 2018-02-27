FROM node:boron-alpine

# Add essential build tools
RUN apk add --no-cache bash build-base automake autoconf libtool libpng-dev nasm

# Create app directory and set as working directory
RUN mkdir -p /opt/etaromangan
WORKDIR /opt/etaromangan
RUN chown -R node:node /opt/etaromangan

# Install app dependencies (done before copying app source to optimize caching)
COPY package.json /opt/etaromangan/
COPY package-lock.json /opt/etaromangan/
COPY yarn.lock /opt/etaromangan/

RUN npm install --quiet

# Build asset every time this container is run
CMD ["npm", "run", "watch"]


