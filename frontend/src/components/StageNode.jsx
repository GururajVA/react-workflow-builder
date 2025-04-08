import { Handle, Position } from 'reactflow';

export default function StageNode({ data }) {
  return (
    <div className="stage-node">
      <Handle type="target" position={Position.Top} />
      <div className="node-content">{data.label}</div>
      <Handle type="source" position={Position.Bottom} />
    </div>
  );
}