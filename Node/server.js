// import { createServer } from 'node:http'

// const server = createServer((request, response) => {
//     response.write('Hello world!')

//     return response.end
// })

// server.listen(3333)

import { fastify } from 'fastify'
import { databaseMemory } from './database.js'

const database = new databaseMemory

const server = fastify()

server.post('/videos', (request, reply) => {

    const { title, description, duration } = request.body

    database.create({
        title,
        description,
        duration,
    })

    console.log(database.list())

    return reply.status(201).send()

})

server.get('/videos', () => {
   const videos = database.list()

   return videos
})

server.put('/videos/:id', () => {
    return 'hello world'
})

server.delete('/videos/:id', () => {
    return 'Hello world'
})


server.listen({
    port: 5000,
})