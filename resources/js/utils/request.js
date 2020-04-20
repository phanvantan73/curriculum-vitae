import axios from 'axios';

const service = axios.create({
  timeout: 3000,
});

service.interceptors.request.use(
  config => {
    // config before do request here
    return config;
  },
  error => {
    Promise.reject(error);
  }
);

service.interceptors.response.use(
  response => {
    if (response.data) {
      return response.data;
    }

    return response;
  },
  error => {
    return Promise.reject(error);
  },
);

export default service;
