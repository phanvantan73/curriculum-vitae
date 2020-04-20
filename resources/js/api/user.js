import request from '@/utils/request';

export function getInfo() {
  return request({
    url: '/api/get-info',
    method: 'get'
  });
}

export function getCareer() {
  return request({
    url: '/api/get-career',
    method: 'get'
  });
}

export function getExperience() {
  return request({
    url: '/api/get-experience',
    method: 'get'
  });
}
