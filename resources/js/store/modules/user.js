import { getInfo, getCareer, getExperience } from '@/api/user'

const state = {
  info: {},
  career: [],
  experience: {}
};

const mutations = {
  SET_INFO: (_state, info) => {
    _state.info = info;
  },
  SET_CAREER: (_state, career) => {
    _state.career = career;
  },
  SET_EXPERIENCE: (_state, experience) => {
    _state.experience = experience;
  }
};

const actions = {
  async getUser({
    commit
  }) {
    try {
      const data = await getInfo();
      commit('SET_INFO', data);

      return Promise.resolve();
    } catch (error) {
      return Promise.reject(error);
    }
  },
  async getCareer({
    commit
  }) {
    try {
      const careerData = await getCareer();
      commit('SET_CAREER', careerData);

      return Promise.resolve();
    } catch (error) {
      return Promise.reject(error);
    }
  },
  async getExperience({
    commit
  }) {
    try {
      const workExperience = await getExperience();
      commit('SET_EXPERIENCE', workExperience);

      return Promise.resolve();
    } catch (error) {
      return Promise.reject(error);
    }
  }
};

export default {
  namespace: true,
  state,
  mutations,
  actions
}
