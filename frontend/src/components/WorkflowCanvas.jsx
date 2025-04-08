import React, { useState } from 'react';
import ReactFlow, { Controls } from 'reactflow';
import 'reactflow/dist/style.css';
import StageNode from './StageNode';

const nodeTypes = { stageNode: StageNode };

const initialNodes = [
  { id: '1', position: { x: 0, y: 0 }, data: { label: 'Draft' }, type: 'stageNode' },
];

export default function WorkflowCanvas() {
  const [nodes, setNodes] = useState(initialNodes);
  
  return (
    <div style={{ height: '100vh', width: '100%' }}>
      <ReactFlow 
        nodes={nodes}
        nodeTypes={nodeTypes}
        fitView
      >
        <Controls />
      </ReactFlow>
    </div>
  );
}