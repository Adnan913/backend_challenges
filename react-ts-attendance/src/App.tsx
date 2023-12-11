import React, { useCallback, useState }  from 'react';
import AttendanceTable from './components/AttendanceTable';
import { useDropzone } from 'react-dropzone';
import axios from 'axios';

const App: React.FC = () => {
  const [uploadedFile, setUploadedFile] = useState<File | null>(null);
  const { getRootProps, getInputProps } = useDropzone();

  
  const handleUpload = async () => {
    if (uploadedFile) {
      const formData = new FormData();
      formData.append('file', uploadedFile);

      try {
        // Change the URL to your backend API endpoint
        await axios.post('http://localhost:8000/test', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });

        // File uploaded successfully
        console.log('File uploaded successfully');
      } catch (error) {
        console.error('Error uploading file', error);
      }
    }
  };

  return (
    <div className="App">
      <h1>Test Drop Zone</h1>
      <div {...getRootProps()}>
        <input {...getInputProps()} />
        <p>Drag 'n' drop some files here, or click to select files</p>
      </div>
      <button onClick={()=>handleUpload()}>Upload</button>
    </div>
  );
};
export default App;