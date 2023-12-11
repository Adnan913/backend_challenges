import React from 'react';

interface AttendanceData {
  id: number;
  name: string;
  status: string;
}

interface AttendanceTableProps {
  data: AttendanceData[];
}

const AttendanceTable: React.FC<AttendanceTableProps> = ({ data }) => {
  return (
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        {data.map((item) => (
          <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.name}</td>
            <td>{item.status}</td>
          </tr>
        ))}
      </tbody>
    </table>
  );
};

export default AttendanceTable;
