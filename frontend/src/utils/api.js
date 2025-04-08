import axios from 'axios';

const api = axios.create({
  baseURL: process.env.REACT_APP_API_URL || 'http://localhost:8000/api',
});

export const getWorkflows = () => api.get('/workflows');
export const createWorkflow = (workflow) => api.post('/workflows', workflow);